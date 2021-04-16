// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Generated code. DO NOT EDIT!

using gax = Google.Api.Gax;
using gagr = Google.Api.Gax.ResourceNames;
using gcgv = Google.Cloud.Gaming.V1Beta;
using sys = System;

namespace Google.Cloud.Gaming.V1Beta
{
    /// <summary>Resource name for the <c>Realm</c> resource.</summary>
    public sealed partial class RealmName : gax::IResourceName, sys::IEquatable<RealmName>
    {
        /// <summary>The possible contents of <see cref="RealmName"/>.</summary>
        public enum ResourceNameType
        {
            /// <summary>An unparsed resource name.</summary>
            Unparsed = 0,

            /// <summary>
            /// A resource name with pattern <c>projects/{project}/locations/{location}/realms/{realm}</c>.
            /// </summary>
            ProjectLocationRealm = 1,
        }

        private static gax::PathTemplate s_projectLocationRealm = new gax::PathTemplate("projects/{project}/locations/{location}/realms/{realm}");

        /// <summary>Creates a <see cref="RealmName"/> containing an unparsed resource name.</summary>
        /// <param name="unparsedResourceName">The unparsed resource name. Must not be <c>null</c>.</param>
        /// <returns>
        /// A new instance of <see cref="RealmName"/> containing the provided <paramref name="unparsedResourceName"/>.
        /// </returns>
        public static RealmName FromUnparsed(gax::UnparsedResourceName unparsedResourceName) =>
            new RealmName(ResourceNameType.Unparsed, gax::GaxPreconditions.CheckNotNull(unparsedResourceName, nameof(unparsedResourceName)));

        /// <summary>
        /// Creates a <see cref="RealmName"/> with the pattern <c>projects/{project}/locations/{location}/realms/{realm}</c>
        /// .
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="locationId">The <c>Location</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="realmId">The <c>Realm</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="RealmName"/> constructed from the provided ids.</returns>
        public static RealmName FromProjectLocationRealm(string projectId, string locationId, string realmId) =>
            new RealmName(ResourceNameType.ProjectLocationRealm, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), locationId: gax::GaxPreconditions.CheckNotNullOrEmpty(locationId, nameof(locationId)), realmId: gax::GaxPreconditions.CheckNotNullOrEmpty(realmId, nameof(realmId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="RealmName"/> with pattern
        /// <c>projects/{project}/locations/{location}/realms/{realm}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="locationId">The <c>Location</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="realmId">The <c>Realm</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="RealmName"/> with pattern
        /// <c>projects/{project}/locations/{location}/realms/{realm}</c>.
        /// </returns>
        public static string Format(string projectId, string locationId, string realmId) =>
            FormatProjectLocationRealm(projectId, locationId, realmId);

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="RealmName"/> with pattern
        /// <c>projects/{project}/locations/{location}/realms/{realm}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="locationId">The <c>Location</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="realmId">The <c>Realm</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="RealmName"/> with pattern
        /// <c>projects/{project}/locations/{location}/realms/{realm}</c>.
        /// </returns>
        public static string FormatProjectLocationRealm(string projectId, string locationId, string realmId) =>
            s_projectLocationRealm.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), gax::GaxPreconditions.CheckNotNullOrEmpty(locationId, nameof(locationId)), gax::GaxPreconditions.CheckNotNullOrEmpty(realmId, nameof(realmId)));

        /// <summary>Parses the given resource name string into a new <see cref="RealmName"/> instance.</summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/locations/{location}/realms/{realm}</c></description></item>
        /// </list>
        /// </remarks>
        /// <param name="realmName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <returns>The parsed <see cref="RealmName"/> if successful.</returns>
        public static RealmName Parse(string realmName) => Parse(realmName, false);

        /// <summary>
        /// Parses the given resource name string into a new <see cref="RealmName"/> instance; optionally allowing an
        /// unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/locations/{location}/realms/{realm}</c></description></item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="realmName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <returns>The parsed <see cref="RealmName"/> if successful.</returns>
        public static RealmName Parse(string realmName, bool allowUnparsed) =>
            TryParse(realmName, allowUnparsed, out RealmName result) ? result : throw new sys::ArgumentException("The given resource-name matches no pattern.");

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="RealmName"/> instance.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/locations/{location}/realms/{realm}</c></description></item>
        /// </list>
        /// </remarks>
        /// <param name="realmName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="RealmName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string realmName, out RealmName result) => TryParse(realmName, false, out result);

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="RealmName"/> instance; optionally
        /// allowing an unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/locations/{location}/realms/{realm}</c></description></item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="realmName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="RealmName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string realmName, bool allowUnparsed, out RealmName result)
        {
            gax::GaxPreconditions.CheckNotNull(realmName, nameof(realmName));
            gax::TemplatedResourceName resourceName;
            if (s_projectLocationRealm.TryParseName(realmName, out resourceName))
            {
                result = FromProjectLocationRealm(resourceName[0], resourceName[1], resourceName[2]);
                return true;
            }
            if (allowUnparsed)
            {
                if (gax::UnparsedResourceName.TryParse(realmName, out gax::UnparsedResourceName unparsedResourceName))
                {
                    result = FromUnparsed(unparsedResourceName);
                    return true;
                }
            }
            result = null;
            return false;
        }

        private RealmName(ResourceNameType type, gax::UnparsedResourceName unparsedResourceName = null, string locationId = null, string projectId = null, string realmId = null)
        {
            Type = type;
            UnparsedResource = unparsedResourceName;
            LocationId = locationId;
            ProjectId = projectId;
            RealmId = realmId;
        }

        /// <summary>
        /// Constructs a new instance of a <see cref="RealmName"/> class from the component parts of pattern
        /// <c>projects/{project}/locations/{location}/realms/{realm}</c>
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="locationId">The <c>Location</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="realmId">The <c>Realm</c> ID. Must not be <c>null</c> or empty.</param>
        public RealmName(string projectId, string locationId, string realmId) : this(ResourceNameType.ProjectLocationRealm, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), locationId: gax::GaxPreconditions.CheckNotNullOrEmpty(locationId, nameof(locationId)), realmId: gax::GaxPreconditions.CheckNotNullOrEmpty(realmId, nameof(realmId)))
        {
        }

        /// <summary>The <see cref="ResourceNameType"/> of the contained resource name.</summary>
        public ResourceNameType Type { get; }

        /// <summary>
        /// The contained <see cref="gax::UnparsedResourceName"/>. Only non-<c>null</c> if this instance contains an
        /// unparsed resource name.
        /// </summary>
        public gax::UnparsedResourceName UnparsedResource { get; }

        /// <summary>
        /// The <c>Location</c> ID. Will not be <c>null</c>, unless this instance contains an unparsed resource name.
        /// </summary>
        public string LocationId { get; }

        /// <summary>
        /// The <c>Project</c> ID. Will not be <c>null</c>, unless this instance contains an unparsed resource name.
        /// </summary>
        public string ProjectId { get; }

        /// <summary>
        /// The <c>Realm</c> ID. Will not be <c>null</c>, unless this instance contains an unparsed resource name.
        /// </summary>
        public string RealmId { get; }

        /// <summary>Whether this instance contains a resource name with a known pattern.</summary>
        public bool IsKnownPattern => Type != ResourceNameType.Unparsed;

        /// <summary>The string representation of the resource name.</summary>
        /// <returns>The string representation of the resource name.</returns>
        public override string ToString()
        {
            switch (Type)
            {
                case ResourceNameType.Unparsed: return UnparsedResource.ToString();
                case ResourceNameType.ProjectLocationRealm: return s_projectLocationRealm.Expand(ProjectId, LocationId, RealmId);
                default: throw new sys::InvalidOperationException("Unrecognized resource-type.");
            }
        }

        /// <summary>Returns a hash code for this resource name.</summary>
        public override int GetHashCode() => ToString().GetHashCode();

        /// <inheritdoc/>
        public override bool Equals(object obj) => Equals(obj as RealmName);

        /// <inheritdoc/>
        public bool Equals(RealmName other) => ToString() == other?.ToString();

        /// <inheritdoc/>
        public static bool operator ==(RealmName a, RealmName b) => ReferenceEquals(a, b) || (a?.Equals(b) ?? false);

        /// <inheritdoc/>
        public static bool operator !=(RealmName a, RealmName b) => !(a == b);
    }

    public partial class ListRealmsRequest
    {
        /// <summary>
        /// <see cref="gagr::LocationName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::LocationName ParentAsLocationName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::LocationName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class GetRealmRequest
    {
        /// <summary>
        /// <see cref="gcgv::RealmName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcgv::RealmName RealmName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcgv::RealmName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class CreateRealmRequest
    {
        /// <summary>
        /// <see cref="gagr::LocationName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::LocationName ParentAsLocationName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::LocationName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class DeleteRealmRequest
    {
        /// <summary>
        /// <see cref="gcgv::RealmName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcgv::RealmName RealmName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcgv::RealmName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class Realm
    {
        /// <summary>
        /// <see cref="gcgv::RealmName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcgv::RealmName RealmName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcgv::RealmName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }
}
