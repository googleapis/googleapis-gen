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
using gcdv = Google.Cloud.Dialogflow.V2;
using sys = System;

namespace Google.Cloud.Dialogflow.V2
{
    /// <summary>Resource name for the <c>Conversation</c> resource.</summary>
    public sealed partial class ConversationName : gax::IResourceName, sys::IEquatable<ConversationName>
    {
        /// <summary>The possible contents of <see cref="ConversationName"/>.</summary>
        public enum ResourceNameType
        {
            /// <summary>An unparsed resource name.</summary>
            Unparsed = 0,

            /// <summary>A resource name with pattern <c>projects/{project}/conversations/{conversation}</c>.</summary>
            ProjectConversation = 1,

            /// <summary>
            /// A resource name with pattern <c>projects/{project}/locations/{location}/conversations/{conversation}</c>
            /// .
            /// </summary>
            ProjectLocationConversation = 2,
        }

        private static gax::PathTemplate s_projectConversation = new gax::PathTemplate("projects/{project}/conversations/{conversation}");

        private static gax::PathTemplate s_projectLocationConversation = new gax::PathTemplate("projects/{project}/locations/{location}/conversations/{conversation}");

        /// <summary>Creates a <see cref="ConversationName"/> containing an unparsed resource name.</summary>
        /// <param name="unparsedResourceName">The unparsed resource name. Must not be <c>null</c>.</param>
        /// <returns>
        /// A new instance of <see cref="ConversationName"/> containing the provided
        /// <paramref name="unparsedResourceName"/>.
        /// </returns>
        public static ConversationName FromUnparsed(gax::UnparsedResourceName unparsedResourceName) =>
            new ConversationName(ResourceNameType.Unparsed, gax::GaxPreconditions.CheckNotNull(unparsedResourceName, nameof(unparsedResourceName)));

        /// <summary>
        /// Creates a <see cref="ConversationName"/> with the pattern <c>projects/{project}/conversations/{conversation}</c>
        /// .
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="conversationId">The <c>Conversation</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="ConversationName"/> constructed from the provided ids.</returns>
        public static ConversationName FromProjectConversation(string projectId, string conversationId) =>
            new ConversationName(ResourceNameType.ProjectConversation, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), conversationId: gax::GaxPreconditions.CheckNotNullOrEmpty(conversationId, nameof(conversationId)));

        /// <summary>
        /// Creates a <see cref="ConversationName"/> with the pattern
        /// <c>projects/{project}/locations/{location}/conversations/{conversation}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="locationId">The <c>Location</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="conversationId">The <c>Conversation</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="ConversationName"/> constructed from the provided ids.</returns>
        public static ConversationName FromProjectLocationConversation(string projectId, string locationId, string conversationId) =>
            new ConversationName(ResourceNameType.ProjectLocationConversation, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), locationId: gax::GaxPreconditions.CheckNotNullOrEmpty(locationId, nameof(locationId)), conversationId: gax::GaxPreconditions.CheckNotNullOrEmpty(conversationId, nameof(conversationId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="ConversationName"/> with pattern
        /// <c>projects/{project}/conversations/{conversation}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="conversationId">The <c>Conversation</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="ConversationName"/> with pattern
        /// <c>projects/{project}/conversations/{conversation}</c>.
        /// </returns>
        public static string Format(string projectId, string conversationId) =>
            FormatProjectConversation(projectId, conversationId);

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="ConversationName"/> with pattern
        /// <c>projects/{project}/conversations/{conversation}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="conversationId">The <c>Conversation</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="ConversationName"/> with pattern
        /// <c>projects/{project}/conversations/{conversation}</c>.
        /// </returns>
        public static string FormatProjectConversation(string projectId, string conversationId) =>
            s_projectConversation.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), gax::GaxPreconditions.CheckNotNullOrEmpty(conversationId, nameof(conversationId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="ConversationName"/> with pattern
        /// <c>projects/{project}/locations/{location}/conversations/{conversation}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="locationId">The <c>Location</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="conversationId">The <c>Conversation</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="ConversationName"/> with pattern
        /// <c>projects/{project}/locations/{location}/conversations/{conversation}</c>.
        /// </returns>
        public static string FormatProjectLocationConversation(string projectId, string locationId, string conversationId) =>
            s_projectLocationConversation.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), gax::GaxPreconditions.CheckNotNullOrEmpty(locationId, nameof(locationId)), gax::GaxPreconditions.CheckNotNullOrEmpty(conversationId, nameof(conversationId)));

        /// <summary>Parses the given resource name string into a new <see cref="ConversationName"/> instance.</summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/conversations/{conversation}</c></description></item>
        /// <item>
        /// <description><c>projects/{project}/locations/{location}/conversations/{conversation}</c></description>
        /// </item>
        /// </list>
        /// </remarks>
        /// <param name="conversationName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <returns>The parsed <see cref="ConversationName"/> if successful.</returns>
        public static ConversationName Parse(string conversationName) => Parse(conversationName, false);

        /// <summary>
        /// Parses the given resource name string into a new <see cref="ConversationName"/> instance; optionally
        /// allowing an unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/conversations/{conversation}</c></description></item>
        /// <item>
        /// <description><c>projects/{project}/locations/{location}/conversations/{conversation}</c></description>
        /// </item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="conversationName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <returns>The parsed <see cref="ConversationName"/> if successful.</returns>
        public static ConversationName Parse(string conversationName, bool allowUnparsed) =>
            TryParse(conversationName, allowUnparsed, out ConversationName result) ? result : throw new sys::ArgumentException("The given resource-name matches no pattern.");

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="ConversationName"/> instance.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/conversations/{conversation}</c></description></item>
        /// <item>
        /// <description><c>projects/{project}/locations/{location}/conversations/{conversation}</c></description>
        /// </item>
        /// </list>
        /// </remarks>
        /// <param name="conversationName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="ConversationName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string conversationName, out ConversationName result) =>
            TryParse(conversationName, false, out result);

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="ConversationName"/> instance; optionally
        /// allowing an unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/conversations/{conversation}</c></description></item>
        /// <item>
        /// <description><c>projects/{project}/locations/{location}/conversations/{conversation}</c></description>
        /// </item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="conversationName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="ConversationName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string conversationName, bool allowUnparsed, out ConversationName result)
        {
            gax::GaxPreconditions.CheckNotNull(conversationName, nameof(conversationName));
            gax::TemplatedResourceName resourceName;
            if (s_projectConversation.TryParseName(conversationName, out resourceName))
            {
                result = FromProjectConversation(resourceName[0], resourceName[1]);
                return true;
            }
            if (s_projectLocationConversation.TryParseName(conversationName, out resourceName))
            {
                result = FromProjectLocationConversation(resourceName[0], resourceName[1], resourceName[2]);
                return true;
            }
            if (allowUnparsed)
            {
                if (gax::UnparsedResourceName.TryParse(conversationName, out gax::UnparsedResourceName unparsedResourceName))
                {
                    result = FromUnparsed(unparsedResourceName);
                    return true;
                }
            }
            result = null;
            return false;
        }

        private ConversationName(ResourceNameType type, gax::UnparsedResourceName unparsedResourceName = null, string conversationId = null, string locationId = null, string projectId = null)
        {
            Type = type;
            UnparsedResource = unparsedResourceName;
            ConversationId = conversationId;
            LocationId = locationId;
            ProjectId = projectId;
        }

        /// <summary>
        /// Constructs a new instance of a <see cref="ConversationName"/> class from the component parts of pattern
        /// <c>projects/{project}/conversations/{conversation}</c>
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="conversationId">The <c>Conversation</c> ID. Must not be <c>null</c> or empty.</param>
        public ConversationName(string projectId, string conversationId) : this(ResourceNameType.ProjectConversation, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), conversationId: gax::GaxPreconditions.CheckNotNullOrEmpty(conversationId, nameof(conversationId)))
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
        /// The <c>Conversation</c> ID. May be <c>null</c>, depending on which resource name is contained by this
        /// instance.
        /// </summary>
        public string ConversationId { get; }

        /// <summary>
        /// The <c>Location</c> ID. May be <c>null</c>, depending on which resource name is contained by this instance.
        /// </summary>
        public string LocationId { get; }

        /// <summary>
        /// The <c>Project</c> ID. May be <c>null</c>, depending on which resource name is contained by this instance.
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
                case ResourceNameType.ProjectConversation: return s_projectConversation.Expand(ProjectId, ConversationId);
                case ResourceNameType.ProjectLocationConversation: return s_projectLocationConversation.Expand(ProjectId, LocationId, ConversationId);
                default: throw new sys::InvalidOperationException("Unrecognized resource-type.");
            }
        }

        /// <summary>Returns a hash code for this resource name.</summary>
        public override int GetHashCode() => ToString().GetHashCode();

        /// <inheritdoc/>
        public override bool Equals(object obj) => Equals(obj as ConversationName);

        /// <inheritdoc/>
        public bool Equals(ConversationName other) => ToString() == other?.ToString();

        /// <inheritdoc/>
        public static bool operator ==(ConversationName a, ConversationName b) => ReferenceEquals(a, b) || (a?.Equals(b) ?? false);

        /// <inheritdoc/>
        public static bool operator !=(ConversationName a, ConversationName b) => !(a == b);
    }

    public partial class Conversation
    {
        /// <summary>
        /// <see cref="gcdv::ConversationName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcdv::ConversationName ConversationName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcdv::ConversationName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }

        /// <summary>
        /// <see cref="ConversationProfileName"/>-typed view over the <see cref="ConversationProfile"/> resource name
        /// property.
        /// </summary>
        public ConversationProfileName ConversationProfileAsConversationProfileName
        {
            get => string.IsNullOrEmpty(ConversationProfile) ? null : ConversationProfileName.Parse(ConversationProfile, allowUnparsed: true);
            set => ConversationProfile = value?.ToString() ?? "";
        }
    }

    public partial class CreateConversationRequest
    {
        /// <summary>
        /// <see cref="gagr::ProjectName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::ProjectName ParentAsProjectName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::ProjectName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }

        /// <summary>
        /// <see cref="gagr::LocationName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::LocationName ParentAsLocationName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::LocationName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }

        /// <summary>
        /// <see cref="gax::IResourceName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gax::IResourceName ParentAsResourceName
        {
            get
            {
                if (string.IsNullOrEmpty(Parent))
                {
                    return null;
                }
                if (gagr::ProjectName.TryParse(Parent, out gagr::ProjectName project))
                {
                    return project;
                }
                if (gagr::LocationName.TryParse(Parent, out gagr::LocationName location))
                {
                    return location;
                }
                return gax::UnparsedResourceName.Parse(Parent);
            }
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class ListConversationsRequest
    {
        /// <summary>
        /// <see cref="gagr::ProjectName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::ProjectName ParentAsProjectName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::ProjectName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }

        /// <summary>
        /// <see cref="gagr::LocationName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gagr::LocationName ParentAsLocationName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gagr::LocationName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }

        /// <summary>
        /// <see cref="gax::IResourceName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gax::IResourceName ParentAsResourceName
        {
            get
            {
                if (string.IsNullOrEmpty(Parent))
                {
                    return null;
                }
                if (gagr::ProjectName.TryParse(Parent, out gagr::ProjectName project))
                {
                    return project;
                }
                if (gagr::LocationName.TryParse(Parent, out gagr::LocationName location))
                {
                    return location;
                }
                return gax::UnparsedResourceName.Parse(Parent);
            }
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class GetConversationRequest
    {
        /// <summary>
        /// <see cref="gcdv::ConversationName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcdv::ConversationName ConversationName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcdv::ConversationName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class CompleteConversationRequest
    {
        /// <summary>
        /// <see cref="gcdv::ConversationName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcdv::ConversationName ConversationName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcdv::ConversationName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class ListMessagesRequest
    {
        /// <summary>
        /// <see cref="ConversationName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public ConversationName ParentAsConversationName
        {
            get => string.IsNullOrEmpty(Parent) ? null : ConversationName.Parse(Parent, allowUnparsed: true);
            set => Parent = value?.ToString() ?? "";
        }
    }
}
