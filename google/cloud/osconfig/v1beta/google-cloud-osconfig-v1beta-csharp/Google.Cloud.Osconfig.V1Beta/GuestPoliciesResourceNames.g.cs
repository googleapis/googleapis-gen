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
using gcov = Google.Cloud.Osconfig.V1Beta;
using sys = System;

namespace Google.Cloud.Osconfig.V1Beta
{
    /// <summary>Resource name for the <c>GuestPolicy</c> resource.</summary>
    public sealed partial class GuestPolicyName : gax::IResourceName, sys::IEquatable<GuestPolicyName>
    {
        /// <summary>The possible contents of <see cref="GuestPolicyName"/>.</summary>
        public enum ResourceNameType
        {
            /// <summary>An unparsed resource name.</summary>
            Unparsed = 0,

            /// <summary>A resource name with pattern <c>projects/{project}/guestPolicies/{guest_policy}</c>.</summary>
            ProjectGuestPolicy = 1,
        }

        private static gax::PathTemplate s_projectGuestPolicy = new gax::PathTemplate("projects/{project}/guestPolicies/{guest_policy}");

        /// <summary>Creates a <see cref="GuestPolicyName"/> containing an unparsed resource name.</summary>
        /// <param name="unparsedResourceName">The unparsed resource name. Must not be <c>null</c>.</param>
        /// <returns>
        /// A new instance of <see cref="GuestPolicyName"/> containing the provided
        /// <paramref name="unparsedResourceName"/>.
        /// </returns>
        public static GuestPolicyName FromUnparsed(gax::UnparsedResourceName unparsedResourceName) =>
            new GuestPolicyName(ResourceNameType.Unparsed, gax::GaxPreconditions.CheckNotNull(unparsedResourceName, nameof(unparsedResourceName)));

        /// <summary>
        /// Creates a <see cref="GuestPolicyName"/> with the pattern <c>projects/{project}/guestPolicies/{guest_policy}</c>
        /// .
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="guestPolicyId">The <c>GuestPolicy</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="GuestPolicyName"/> constructed from the provided ids.</returns>
        public static GuestPolicyName FromProjectGuestPolicy(string projectId, string guestPolicyId) =>
            new GuestPolicyName(ResourceNameType.ProjectGuestPolicy, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), guestPolicyId: gax::GaxPreconditions.CheckNotNullOrEmpty(guestPolicyId, nameof(guestPolicyId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="GuestPolicyName"/> with pattern
        /// <c>projects/{project}/guestPolicies/{guest_policy}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="guestPolicyId">The <c>GuestPolicy</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="GuestPolicyName"/> with pattern
        /// <c>projects/{project}/guestPolicies/{guest_policy}</c>.
        /// </returns>
        public static string Format(string projectId, string guestPolicyId) =>
            FormatProjectGuestPolicy(projectId, guestPolicyId);

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="GuestPolicyName"/> with pattern
        /// <c>projects/{project}/guestPolicies/{guest_policy}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="guestPolicyId">The <c>GuestPolicy</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="GuestPolicyName"/> with pattern
        /// <c>projects/{project}/guestPolicies/{guest_policy}</c>.
        /// </returns>
        public static string FormatProjectGuestPolicy(string projectId, string guestPolicyId) =>
            s_projectGuestPolicy.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), gax::GaxPreconditions.CheckNotNullOrEmpty(guestPolicyId, nameof(guestPolicyId)));

        /// <summary>Parses the given resource name string into a new <see cref="GuestPolicyName"/> instance.</summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/guestPolicies/{guest_policy}</c></description></item>
        /// </list>
        /// </remarks>
        /// <param name="guestPolicyName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <returns>The parsed <see cref="GuestPolicyName"/> if successful.</returns>
        public static GuestPolicyName Parse(string guestPolicyName) => Parse(guestPolicyName, false);

        /// <summary>
        /// Parses the given resource name string into a new <see cref="GuestPolicyName"/> instance; optionally allowing
        /// an unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/guestPolicies/{guest_policy}</c></description></item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="guestPolicyName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <returns>The parsed <see cref="GuestPolicyName"/> if successful.</returns>
        public static GuestPolicyName Parse(string guestPolicyName, bool allowUnparsed) =>
            TryParse(guestPolicyName, allowUnparsed, out GuestPolicyName result) ? result : throw new sys::ArgumentException("The given resource-name matches no pattern.");

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="GuestPolicyName"/> instance.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/guestPolicies/{guest_policy}</c></description></item>
        /// </list>
        /// </remarks>
        /// <param name="guestPolicyName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="GuestPolicyName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string guestPolicyName, out GuestPolicyName result) =>
            TryParse(guestPolicyName, false, out result);

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="GuestPolicyName"/> instance; optionally
        /// allowing an unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/guestPolicies/{guest_policy}</c></description></item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="guestPolicyName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="GuestPolicyName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string guestPolicyName, bool allowUnparsed, out GuestPolicyName result)
        {
            gax::GaxPreconditions.CheckNotNull(guestPolicyName, nameof(guestPolicyName));
            gax::TemplatedResourceName resourceName;
            if (s_projectGuestPolicy.TryParseName(guestPolicyName, out resourceName))
            {
                result = FromProjectGuestPolicy(resourceName[0], resourceName[1]);
                return true;
            }
            if (allowUnparsed)
            {
                if (gax::UnparsedResourceName.TryParse(guestPolicyName, out gax::UnparsedResourceName unparsedResourceName))
                {
                    result = FromUnparsed(unparsedResourceName);
                    return true;
                }
            }
            result = null;
            return false;
        }

        private GuestPolicyName(ResourceNameType type, gax::UnparsedResourceName unparsedResourceName = null, string guestPolicyId = null, string projectId = null)
        {
            Type = type;
            UnparsedResource = unparsedResourceName;
            GuestPolicyId = guestPolicyId;
            ProjectId = projectId;
        }

        /// <summary>
        /// Constructs a new instance of a <see cref="GuestPolicyName"/> class from the component parts of pattern
        /// <c>projects/{project}/guestPolicies/{guest_policy}</c>
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="guestPolicyId">The <c>GuestPolicy</c> ID. Must not be <c>null</c> or empty.</param>
        public GuestPolicyName(string projectId, string guestPolicyId) : this(ResourceNameType.ProjectGuestPolicy, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), guestPolicyId: gax::GaxPreconditions.CheckNotNullOrEmpty(guestPolicyId, nameof(guestPolicyId)))
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
        /// The <c>GuestPolicy</c> ID. Will not be <c>null</c>, unless this instance contains an unparsed resource name.
        /// </summary>
        public string GuestPolicyId { get; }

        /// <summary>
        /// The <c>Project</c> ID. Will not be <c>null</c>, unless this instance contains an unparsed resource name.
        /// </summary>
        public string ProjectId { get; }

        /// <summary>Whether this instance contains a resource name with a known pattern.</summary>
        public bool IsKnownPattern => Type != ResourceNameType.Unparsed;

        /// <summary>The string representation of the resource name.</summary>
        /// <returns>The string representation of the resource name.</returns>
        public override string ToString()
        {
            switch (Type)
            {
                case ResourceNameType.Unparsed: return UnparsedResource.ToString();
                case ResourceNameType.ProjectGuestPolicy: return s_projectGuestPolicy.Expand(ProjectId, GuestPolicyId);
                default: throw new sys::InvalidOperationException("Unrecognized resource-type.");
            }
        }

        /// <summary>Returns a hash code for this resource name.</summary>
        public override int GetHashCode() => ToString().GetHashCode();

        /// <inheritdoc/>
        public override bool Equals(object obj) => Equals(obj as GuestPolicyName);

        /// <inheritdoc/>
        public bool Equals(GuestPolicyName other) => ToString() == other?.ToString();

        /// <inheritdoc/>
        public static bool operator ==(GuestPolicyName a, GuestPolicyName b) => ReferenceEquals(a, b) || (a?.Equals(b) ?? false);

        /// <inheritdoc/>
        public static bool operator !=(GuestPolicyName a, GuestPolicyName b) => !(a == b);
    }

    public partial class GuestPolicy
    {
        /// <summary>
        /// <see cref="gcov::GuestPolicyName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcov::GuestPolicyName GuestPolicyName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcov::GuestPolicyName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class CreateGuestPolicyRequest
    {
        /// <summary>
        /// <see cref="gagr::ProjectName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::ProjectName ParentAsProjectName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::ProjectName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class GetGuestPolicyRequest
    {
        /// <summary>
        /// <see cref="gcov::GuestPolicyName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcov::GuestPolicyName GuestPolicyName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcov::GuestPolicyName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class ListGuestPoliciesRequest
    {
        /// <summary>
        /// <see cref="gagr::ProjectName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::ProjectName ParentAsProjectName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::ProjectName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class DeleteGuestPolicyRequest
    {
        /// <summary>
        /// <see cref="gcov::GuestPolicyName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcov::GuestPolicyName GuestPolicyName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcov::GuestPolicyName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }
}
