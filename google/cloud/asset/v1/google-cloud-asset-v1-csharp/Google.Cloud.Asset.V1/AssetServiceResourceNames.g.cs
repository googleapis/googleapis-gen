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
using gcav = Google.Cloud.Asset.V1;
using sys = System;

namespace Google.Cloud.Asset.V1
{
    /// <summary>Resource name for the <c>Feed</c> resource.</summary>
    public sealed partial class FeedName : gax::IResourceName, sys::IEquatable<FeedName>
    {
        /// <summary>The possible contents of <see cref="FeedName"/>.</summary>
        public enum ResourceNameType
        {
            /// <summary>An unparsed resource name.</summary>
            Unparsed = 0,

            /// <summary>A resource name with pattern <c>projects/{project}/feeds/{feed}</c>.</summary>
            ProjectFeed = 1,

            /// <summary>A resource name with pattern <c>folders/{folder}/feeds/{feed}</c>.</summary>
            FolderFeed = 2,

            /// <summary>A resource name with pattern <c>organizations/{organization}/feeds/{feed}</c>.</summary>
            OrganizationFeed = 3,
        }

        private static gax::PathTemplate s_projectFeed = new gax::PathTemplate("projects/{project}/feeds/{feed}");

        private static gax::PathTemplate s_folderFeed = new gax::PathTemplate("folders/{folder}/feeds/{feed}");

        private static gax::PathTemplate s_organizationFeed = new gax::PathTemplate("organizations/{organization}/feeds/{feed}");

        /// <summary>Creates a <see cref="FeedName"/> containing an unparsed resource name.</summary>
        /// <param name="unparsedResourceName">The unparsed resource name. Must not be <c>null</c>.</param>
        /// <returns>
        /// A new instance of <see cref="FeedName"/> containing the provided <paramref name="unparsedResourceName"/>.
        /// </returns>
        public static FeedName FromUnparsed(gax::UnparsedResourceName unparsedResourceName) =>
            new FeedName(ResourceNameType.Unparsed, gax::GaxPreconditions.CheckNotNull(unparsedResourceName, nameof(unparsedResourceName)));

        /// <summary>Creates a <see cref="FeedName"/> with the pattern <c>projects/{project}/feeds/{feed}</c>.</summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="FeedName"/> constructed from the provided ids.</returns>
        public static FeedName FromProjectFeed(string projectId, string feedId) =>
            new FeedName(ResourceNameType.ProjectFeed, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), feedId: gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)));

        /// <summary>Creates a <see cref="FeedName"/> with the pattern <c>folders/{folder}/feeds/{feed}</c>.</summary>
        /// <param name="folderId">The <c>Folder</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="FeedName"/> constructed from the provided ids.</returns>
        public static FeedName FromFolderFeed(string folderId, string feedId) =>
            new FeedName(ResourceNameType.FolderFeed, folderId: gax::GaxPreconditions.CheckNotNullOrEmpty(folderId, nameof(folderId)), feedId: gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)));

        /// <summary>
        /// Creates a <see cref="FeedName"/> with the pattern <c>organizations/{organization}/feeds/{feed}</c>.
        /// </summary>
        /// <param name="organizationId">The <c>Organization</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>A new instance of <see cref="FeedName"/> constructed from the provided ids.</returns>
        public static FeedName FromOrganizationFeed(string organizationId, string feedId) =>
            new FeedName(ResourceNameType.OrganizationFeed, organizationId: gax::GaxPreconditions.CheckNotNullOrEmpty(organizationId, nameof(organizationId)), feedId: gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="FeedName"/> with pattern
        /// <c>projects/{project}/feeds/{feed}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="FeedName"/> with pattern <c>projects/{project}/feeds/{feed}</c>
        /// .
        /// </returns>
        public static string Format(string projectId, string feedId) => FormatProjectFeed(projectId, feedId);

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="FeedName"/> with pattern
        /// <c>projects/{project}/feeds/{feed}</c>.
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="FeedName"/> with pattern <c>projects/{project}/feeds/{feed}</c>
        /// .
        /// </returns>
        public static string FormatProjectFeed(string projectId, string feedId) =>
            s_projectFeed.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="FeedName"/> with pattern
        /// <c>folders/{folder}/feeds/{feed}</c>.
        /// </summary>
        /// <param name="folderId">The <c>Folder</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="FeedName"/> with pattern <c>folders/{folder}/feeds/{feed}</c>.
        /// </returns>
        public static string FormatFolderFeed(string folderId, string feedId) =>
            s_folderFeed.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(folderId, nameof(folderId)), gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)));

        /// <summary>
        /// Formats the IDs into the string representation of this <see cref="FeedName"/> with pattern
        /// <c>organizations/{organization}/feeds/{feed}</c>.
        /// </summary>
        /// <param name="organizationId">The <c>Organization</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        /// <returns>
        /// The string representation of this <see cref="FeedName"/> with pattern
        /// <c>organizations/{organization}/feeds/{feed}</c>.
        /// </returns>
        public static string FormatOrganizationFeed(string organizationId, string feedId) =>
            s_organizationFeed.Expand(gax::GaxPreconditions.CheckNotNullOrEmpty(organizationId, nameof(organizationId)), gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)));

        /// <summary>Parses the given resource name string into a new <see cref="FeedName"/> instance.</summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/feeds/{feed}</c></description></item>
        /// <item><description><c>folders/{folder}/feeds/{feed}</c></description></item>
        /// <item><description><c>organizations/{organization}/feeds/{feed}</c></description></item>
        /// </list>
        /// </remarks>
        /// <param name="feedName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <returns>The parsed <see cref="FeedName"/> if successful.</returns>
        public static FeedName Parse(string feedName) => Parse(feedName, false);

        /// <summary>
        /// Parses the given resource name string into a new <see cref="FeedName"/> instance; optionally allowing an
        /// unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/feeds/{feed}</c></description></item>
        /// <item><description><c>folders/{folder}/feeds/{feed}</c></description></item>
        /// <item><description><c>organizations/{organization}/feeds/{feed}</c></description></item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="feedName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <returns>The parsed <see cref="FeedName"/> if successful.</returns>
        public static FeedName Parse(string feedName, bool allowUnparsed) =>
            TryParse(feedName, allowUnparsed, out FeedName result) ? result : throw new sys::ArgumentException("The given resource-name matches no pattern.");

        /// <summary>Tries to parse the given resource name string into a new <see cref="FeedName"/> instance.</summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/feeds/{feed}</c></description></item>
        /// <item><description><c>folders/{folder}/feeds/{feed}</c></description></item>
        /// <item><description><c>organizations/{organization}/feeds/{feed}</c></description></item>
        /// </list>
        /// </remarks>
        /// <param name="feedName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="FeedName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string feedName, out FeedName result) => TryParse(feedName, false, out result);

        /// <summary>
        /// Tries to parse the given resource name string into a new <see cref="FeedName"/> instance; optionally
        /// allowing an unparseable resource name.
        /// </summary>
        /// <remarks>
        /// To parse successfully, the resource name must be formatted as one of the following:
        /// <list type="bullet">
        /// <item><description><c>projects/{project}/feeds/{feed}</c></description></item>
        /// <item><description><c>folders/{folder}/feeds/{feed}</c></description></item>
        /// <item><description><c>organizations/{organization}/feeds/{feed}</c></description></item>
        /// </list>
        /// Or may be in any format if <paramref name="allowUnparsed"/> is <c>true</c>.
        /// </remarks>
        /// <param name="feedName">The resource name in string form. Must not be <c>null</c>.</param>
        /// <param name="allowUnparsed">
        /// If <c>true</c> will successfully store an unparseable resource name into the <see cref="UnparsedResource"/>
        /// property; otherwise will throw an <see cref="sys::ArgumentException"/> if an unparseable resource name is
        /// specified.
        /// </param>
        /// <param name="result">
        /// When this method returns, the parsed <see cref="FeedName"/>, or <c>null</c> if parsing failed.
        /// </param>
        /// <returns><c>true</c> if the name was parsed successfully; <c>false</c> otherwise.</returns>
        public static bool TryParse(string feedName, bool allowUnparsed, out FeedName result)
        {
            gax::GaxPreconditions.CheckNotNull(feedName, nameof(feedName));
            gax::TemplatedResourceName resourceName;
            if (s_projectFeed.TryParseName(feedName, out resourceName))
            {
                result = FromProjectFeed(resourceName[0], resourceName[1]);
                return true;
            }
            if (s_folderFeed.TryParseName(feedName, out resourceName))
            {
                result = FromFolderFeed(resourceName[0], resourceName[1]);
                return true;
            }
            if (s_organizationFeed.TryParseName(feedName, out resourceName))
            {
                result = FromOrganizationFeed(resourceName[0], resourceName[1]);
                return true;
            }
            if (allowUnparsed)
            {
                if (gax::UnparsedResourceName.TryParse(feedName, out gax::UnparsedResourceName unparsedResourceName))
                {
                    result = FromUnparsed(unparsedResourceName);
                    return true;
                }
            }
            result = null;
            return false;
        }

        private FeedName(ResourceNameType type, gax::UnparsedResourceName unparsedResourceName = null, string feedId = null, string folderId = null, string organizationId = null, string projectId = null)
        {
            Type = type;
            UnparsedResource = unparsedResourceName;
            FeedId = feedId;
            FolderId = folderId;
            OrganizationId = organizationId;
            ProjectId = projectId;
        }

        /// <summary>
        /// Constructs a new instance of a <see cref="FeedName"/> class from the component parts of pattern
        /// <c>projects/{project}/feeds/{feed}</c>
        /// </summary>
        /// <param name="projectId">The <c>Project</c> ID. Must not be <c>null</c> or empty.</param>
        /// <param name="feedId">The <c>Feed</c> ID. Must not be <c>null</c> or empty.</param>
        public FeedName(string projectId, string feedId) : this(ResourceNameType.ProjectFeed, projectId: gax::GaxPreconditions.CheckNotNullOrEmpty(projectId, nameof(projectId)), feedId: gax::GaxPreconditions.CheckNotNullOrEmpty(feedId, nameof(feedId)))
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
        /// The <c>Feed</c> ID. May be <c>null</c>, depending on which resource name is contained by this instance.
        /// </summary>
        public string FeedId { get; }

        /// <summary>
        /// The <c>Folder</c> ID. May be <c>null</c>, depending on which resource name is contained by this instance.
        /// </summary>
        public string FolderId { get; }

        /// <summary>
        /// The <c>Organization</c> ID. May be <c>null</c>, depending on which resource name is contained by this
        /// instance.
        /// </summary>
        public string OrganizationId { get; }

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
                case ResourceNameType.ProjectFeed: return s_projectFeed.Expand(ProjectId, FeedId);
                case ResourceNameType.FolderFeed: return s_folderFeed.Expand(FolderId, FeedId);
                case ResourceNameType.OrganizationFeed: return s_organizationFeed.Expand(OrganizationId, FeedId);
                default: throw new sys::InvalidOperationException("Unrecognized resource-type.");
            }
        }

        /// <summary>Returns a hash code for this resource name.</summary>
        public override int GetHashCode() => ToString().GetHashCode();

        /// <inheritdoc/>
        public override bool Equals(object obj) => Equals(obj as FeedName);

        /// <inheritdoc/>
        public bool Equals(FeedName other) => ToString() == other?.ToString();

        /// <inheritdoc/>
        public static bool operator ==(FeedName a, FeedName b) => ReferenceEquals(a, b) || (a?.Equals(b) ?? false);

        /// <inheritdoc/>
        public static bool operator !=(FeedName a, FeedName b) => !(a == b);
    }

    public partial class ExportAssetsRequest
    {
        /// <summary>
        /// <see cref="gax::IResourceName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gax::IResourceName ParentAsResourceName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gax::UnparsedResourceName.Parse(Parent);
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class BatchGetAssetsHistoryRequest
    {
        /// <summary>
        /// <see cref="gax::IResourceName"/>-typed view over the <see cref="Parent"/> resource name property.
        /// </summary>
        public gax::IResourceName ParentAsResourceName
        {
            get => string.IsNullOrEmpty(Parent) ? null : gax::UnparsedResourceName.Parse(Parent);
            set => Parent = value?.ToString() ?? "";
        }
    }

    public partial class GetFeedRequest
    {
        /// <summary>
        /// <see cref="gcav::FeedName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcav::FeedName FeedName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcav::FeedName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class DeleteFeedRequest
    {
        /// <summary>
        /// <see cref="gcav::FeedName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcav::FeedName FeedName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcav::FeedName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }

    public partial class Feed
    {
        /// <summary>
        /// <see cref="gcav::FeedName"/>-typed view over the <see cref="Name"/> resource name property.
        /// </summary>
        public gcav::FeedName FeedName
        {
            get => string.IsNullOrEmpty(Name) ? null : gcav::FeedName.Parse(Name, allowUnparsed: true);
            set => Name = value?.ToString() ?? "";
        }
    }
}
